var chart = c3.generate({
    bindto: "#department-category",
    data: {
        columns: [
            ['Logistic', 4],
            ['HR', 4],
            ['ADMIN', 10],
            ['Finance', 10],
            ['Employee', 30],

        ],
        type: 'donut',

        onclick: function(d, i) { console.log("onclick", d, i); },
        onmouseover: function(d, i) { console.log("onmouseover", d, i); },
        onmouseout: function(d, i) { console.log("onmouseout", d, i); },

        colors: {
            Logistic: '#5969ff',
            HR: '#ff407b',
            ADMIN: '#25d5f2',
            Finance: '#ffc750',
            Employee: '#2ec551',



        }
    },
    donut: {
        label: {
            show: false
        }
    },



});