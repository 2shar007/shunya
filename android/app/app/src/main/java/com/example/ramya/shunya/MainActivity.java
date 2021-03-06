package com.example.ramya.shunya;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.text.TextUtils;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

import com.google.gson.Gson;
import com.khoslalabs.ac.capture.model.auth.AuthCaptureData;
import com.khoslalabs.ac.capture.model.auth.AuthCaptureRequest;
import com.khoslalabs.ac.capture.model.common.Location;
import com.khoslalabs.ac.capture.model.common.LocationType;
import com.khoslalabs.ac.capture.model.common.request.CertificateType;
import com.khoslalabs.ac.capture.model.common.request.Modality;
import com.khoslalabs.ac.capture.model.common.request.ModalityType;


public class MainActivity extends ActionBarActivity {

    public static final int AADHAAR_CONNECT_AUTH_REQUEST = 1001;
    public static final String TEAM_ID = "teamid";


    private EditText aadhaarEditTextView;
    private ImageView qrCodeScanner;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        getActionBar().setTitle("Shunya");
        aadhaarEditTextView = (EditText) findViewById(R.id.aadhaar_number);
    }



    public void authenticate(View v) {
        if (TextUtils.isEmpty(aadhaarEditTextView.getText())) {
            showToast(
                    "Invalid Aadhaar Number. Please enter a valid Aadhaar Number",
                    Toast.LENGTH_LONG);
            return;
        }

        AuthCaptureRequest authCaptureRequest = new AuthCaptureRequest();
        authCaptureRequest.setAadhaar(aadhaarEditTextView.getText().toString());
        authCaptureRequest.setModality(Modality.biometric);
        authCaptureRequest.setModalityType(ModalityType.fp);
        authCaptureRequest.setNumOffingersToCapture(2);
        authCaptureRequest.setCertificateType(CertificateType.preprod);

        Location loc = new Location();
        loc.setType(LocationType.pincode);
        loc.setPincode("560076");
        authCaptureRequest.setLocation(loc);

        Intent i = new Intent();
        i = new Intent("com.example.ramya.shunya");
        i.putExtra("REQUEST", new Gson().toJson(authCaptureRequest));
        try {
            startActivityForResult(i, AADHAAR_CONNECT_AUTH_REQUEST);
        } catch (Exception e) {
            Log.e("ERROR", e.getMessage());
        }
    }

    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);


        if (resultCode == RESULT_OK
                && requestCode == AADHAAR_CONNECT_AUTH_REQUEST && data != null) {
            String responseStr = data.getStringExtra("RESPONSE");
            final AuthCaptureData authCaptureData = new Gson().fromJson(
                    responseStr, AuthCaptureData.class);
            AadhaarAuthAsyncTask authAsyncTask = new AadhaarAuthAsyncTask(this,
                    authCaptureData);
            authAsyncTask.execute("https://ac.khoslalabs.com/hackgate/" + TEAM_ID + "/auth");
            return;
        }
    }

    // HELPER METHODS
    private String readValue(String contents, String dataName) {
        String[] keys;
        if (dataName.contains(",")) {
            keys = dataName.split(",");
        } else {
            keys = new String[] { dataName };
        }
        String value = "";
        for (String key : keys) {
            int startIndex = contents.indexOf(key + "=");
            if (startIndex >= 0) {
                int endIndex = contents.indexOf("\"", startIndex + key.length()
                        + 1 + 1);
                if (endIndex >= 0) {
                    value += " ";
                    value += contents.substring(startIndex + key.length() + 1,
                            endIndex).replaceAll("\"", "");
                }
            }
        }
        return value.trim();
    }

    private void showToast(String text, int duration) {
        Toast toast = Toast.makeText(this, text, duration);
        toast.show();
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
