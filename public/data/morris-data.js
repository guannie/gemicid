$(function() {


     Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Amino Acids",
            value: 20
        }, {
            label: "Genebank",
            value: 10
        }, {
            label: "Users",
            value: 6
        }],
        resize: true
    });

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2016 Q1',
            aminoAcids: 5,
            genebank: 2,
            users: null
        }, {
            period: '2016 Q2',
            aminoAcids: 10,
            genebank: 4,
            users: null
        }, {
            period: '2016 Q3',
            aminoAcids: 30,
            genebank: 10,
            users: 2
        }, {
            period: '2016 Q4',
            aminoAcids: 15,
            genebank: 5,
            users: 6
        }],
        xkey: 'period',
        ykeys: ['aminoAcids', 'genebank', 'users'],
        labels: ['amino acids', 'genebank', 'users'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2016',
            a: 100,
            b: 90,
            c: 80
        }, {
            y: '2017',
            a: 75,
            b: 65,
            c: 80
        }, {
            y: '2018',
            a: 50,
            b: 40,
            c: 80
        }, {
            y: '2019',
            a: 75,
            b: 65,
            c: 80
        }, {
            y: '2020',
            a: 50,
            b: 40,
            c: 80
        }, {
            y: '2021',
            a: 75,
            b: 65,
            c: 80
        }, {
            y: '2022',
            a: 100,
            b: 90,
            c: 80
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['Amino Acids', 'Genebank', 'Users'],
        hideHover: 'auto',
        resize: true
    });
    
});
