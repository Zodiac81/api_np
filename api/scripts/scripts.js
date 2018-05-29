window.onload = function() {


    let formBtn = document.getElementById('cityFormBtn');
    formBtn.addEventListener('click', function () {

        let oldForm = document.forms.getCity;

        let cityForm = new FormData(oldForm);
        let city = cityForm.get('city');
        let data = {
            city: city
        };
        let url = './action_ajax_form.php';

        $.ajax({
            url:     url,
            type:     "POST",
            dataType: "html",
            data: data,
            success: function(response) {
                let a = JSON.parse(response);
                for(let i = 0; i<a.data.length; i++)
                {
                     $('#cities-list').append("<option value="+ a.data[i]['CityID']+">"+a.data[i]['DescriptionRu']+"</option>");
                    //alert('12')
                }
              // $('#cities-list').text(a.data[0]['DescriptionRu']);
                console.log(a.data);


            },
            error: function(response) {
                console.log('Error');
                console.log(response);
            }
        });

    });


};

