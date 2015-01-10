// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2012 Q3',
            '41-60': 2666,
            '25-40': null,
            '>60': 2647
        }, {
            period: '2012 Q4',
            '41-60': 2778,
            '25-40': 2294,
            '>60': 2441
        }, {
            period: '2012 Q1',
            '41-60': 4912,
            '25-40': 1969,
            '>60': 2501
        }, {
            period: '2012 Q2',
            '41-60': 3767,
            '25-40': 3597,
            '>60': 5689
        }, {
            period: '2013 Q3',
            '41-60': 6810,
            '25-40': 1914,
            '>60': 2293
        }, {
            period: '2013 Q4',
            '41-60': 5670,
            '25-40': 4293,
            '>60': 1881
        }, {
            period: '2014 Q1',
            '41-60': 4820,
            '25-40': 3795,
            '>60': 1588
        }, {
            period: '2014 Q2',
            '41-60': 15073,
            '25-40': 5967,
            '>60': 5175
        }, {
            period: '2014 Q3',
            '41-60': 10687,
            '25-40': 4460,
            '>60': 2028
        }, {
            period: '2014 Q4',
            '41-60': 8432,
            '25-40': 5713,
            '>60': 1791
        }],
        xkey: 'period',
        ykeys: ['41-60', '25-40', '>60'],
        labels: ['41-60', '25-40', '>60'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Online Sales",
            value: 12
        }, {
            label: "Agent Sales",
            value: 30
        }, {
            label: "Direct Sales",
            value: 20
        }],
        resize: true
    });

    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            d: '2014-12-01',
            visits: 802
        }, {
            d: '2014-12-02',
            visits: 783
        }, {
            d: '2014-12-03',
            visits: 820
        }, {
            d: '2014-12-04',
            visits: 839
        }, {
            d: '2014-12-05',
            visits: 792
        }, {
            d: '2014-12-06',
            visits: 859
        }, {
            d: '2014-12-07',
            visits: 790
        }, {
            d: '2014-12-08',
            visits: 1680
        }, {
            d: '2014-12-09',
            visits: 1592
        }, {
            d: '2014-12-10',
            visits: 1420
        }, {
            d: '2014-12-11',
            visits: 882
        }, {
            d: '2014-12-12',
            visits: 889
        }, {
            d: '2014-12-13',
            visits: 819
        }, {
            d: '2014-12-14',
            visits: 849
        }, {
            d: '2014-12-15',
            visits: 870
        }, {
            d: '2014-12-16',
            visits: 1063
        }, {
            d: '2014-12-17',
            visits: 1192
        }, {
            d: '2014-12-18',
            visits: 1224
        }, {
            d: '2014-12-19',
            visits: 1329
        }, {
            d: '2014-12-20',
            visits: 1329
        }, {
            d: '2014-12-21',
            visits: 1239
        }, {
            d: '2014-12-22',
            visits: 1190
        }, {
            d: '2014-12-23',
            visits: 1312
        }, {
            d: '2014-12-24',
            visits: 1293
        }, {
            d: '2014-12-25',
            visits: 1283
        }, {
            d: '2014-12-26',
            visits: 1248
        }, {
            d: '2014-12-27',
            visits: 1323
        }, {
            d: '2014-12-28',
            visits: 1390
        }, {
            d: '2014-12-29',
            visits: 1420
        }, {
            d: '2014-12-30',
            visits: 1529
        }, {
            d: '2014-12-31',
            visits: 1892
        }, ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'd',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Visits'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            Age: '25-35',
            Frequency: 136
        }, {
            Age: '36-45',
            Frequency: 137
        }, {
            Age: '46-55',
            Frequency: 275
        }, {
            Age: '56-65',
            Frequency: 380
        }, {
            Age: '66-75',
            Frequency: 655
        }, {
            Age: '>=86',
            Frequency: 1571
        }],
        xkey: 'Age',
        ykeys: ['Frequency'],
        labels: ['No. of customers'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });


});
