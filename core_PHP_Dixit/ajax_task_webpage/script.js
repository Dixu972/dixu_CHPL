// logo and title

$(document).ready(function () {
    console.log('jQuery is loaded');
    $.ajax({
        url: 'fetch_logo_title.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log('AJAX Response:', data);
            if (data && data.logo_url) {
                $('#logo').attr('src', data.logo_url);
                $('#title').text(data.title);
            } else {
                console.log('No data found or logo_url is empty');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error: ' + status + ' ' + error);
            console.log('Response Text:', xhr.responseText);
        }
    });
});

// medicine data load

$(document).ready(function () {
    console.log('Jquery is loaded');
    $.ajax({
        url: 'fetch_medicine.php',
        type: 'GET',
        dataType: 'JSON',
        success: function (data) {
            console.log('Ajax Medicine', data);

            var slideHtml = '';
            var cardCount = 0;

            $.each(data, function (index, value) {
                var cardHtml = '<div class="col-lg-4">' +
                    '<div class="card" style="width: 18rem;">' +
                    '<img src="' + value.image_url + '" class="card-img-top" alt="..." height="190px">' +
                    '<div class="card-body">' +
                    '<h5 class="card-title">' + value.medicine_name + '</h5>' +
                    '<p class="card-text">' + value.description + '</p>' +
                    '<p class="float-end mt-2"><b>Price : <span>' + value.price + '/-</span></b></p>' +
                    '<a href="#" class="btn btn-success disabled">Buy Now</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

                slideHtml = slideHtml + cardHtml;
                cardCount++;

                if (cardCount == 3) {
                    $('#medicine-slides').append('<div class="carousel-item">' +
                        '<div class="row">' + slideHtml + '</div>' +
                        '</div>');

                    slideHtml = '';
                    cardCount = 0;
                }
            });

            if (slideHtml != '') {
                $('#medicine-slides').append('<div class="carousel-item">' +
                    '<div class="row">' + slideHtml + '</div>' +
                    '</div>');
            }

            $('#medicine-slides .carousel-item:first').addClass('active');
        },
        error: function (xhr, status, error) {
            console.log('AJAX Error:', error);
        }
    });
});

// contact us data 

$(document).ready(function () {
    $.ajax({
        url: 'fetch_contactUs.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log('Ajax contact:', data);

            $.each(data, function (index, value) {
                $('#address').html(value.address);
                $('#m_no').html('+91 - ' + value.phone);
                $('#email').html('<a href="mailto:' + value.email_id + '">' + value.email_id + '</a>');
            });
        }
    });

    // about us data

    $.ajax({
        url: 'fetch_about.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log('ajax about :', data);
            $("#about_img").attr('src', "./upload/"+data[0].img_path);
            $("#about_text").text(data[0].description);
        }
    });
});