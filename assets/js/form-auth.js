//Thi 
$(document).ready(function () {

  $('#signup-form').on('submit', function (e) {
    e.preventDefault();

    let form = $(this);
    let alertBox = $('#alertMessage');
    let submitBtn = $('#submitBtn');
    let formData = form.serialize();

    alertBox.html('');

    submitBtn.prop('disabled', true);
    submitBtn.html('<span class="spinner-border spinner-border-sm"></span> Sending...');

    $.ajax({
      url: 'config/send-code.php',
      type: 'POST',
      data: formData,
      dataType: 'json',

      success: function (response) {

        if (response.status === 'success') {
          alertBox.html('<div class="alert alert-success">' + response.message + '</div>');

          if (response.redirect) {
            setTimeout(function () {
              window.location.href = response.redirect;
            }, 1200);
          }

        } else {
          alertBox.html('<div class="alert alert-danger">' + response.message + '</div>');
        }
      },

      error: function (xhr, status, error) {
        console.log('AJAX STATUS:', status);
        console.log('AJAX ERROR:', error);
        console.log('SERVER RESPONSE:', xhr.responseText);

        alertBox.html(
          '<div class="alert alert-danger">' +
          'Something went wrong. Check console for server response.' +
          '</div>'
        );
      },

      complete: function () {
        submitBtn.prop('disabled', false);
        submitBtn.html('Continue');
      }
    });
  });

});
// This file handles the AJAX submission of both the signup form and the OTP verification form. It provides user feedback during the process and handles server responses gracefully.
$(document).ready(function () {

    $('#otpForm').on('submit', function (e) {
      e.preventDefault();
  
      let form = $(this);
      let alertBox = $('#alertMessage');
      let submitBtn = $('#submitBtn');
      let formData = form.serialize();
  
      alertBox.html('');
  
      submitBtn.prop('disabled', true);
      submitBtn.html('<span class="spinner-border spinner-border-sm"></span> Sending...');
  
      $.ajax({
        url: 'config/send-code.php',
        type: 'POST',
        data: formData,
        dataType: 'json',
  
        success: function (response) {
  
          if (response.status === 'success') {
            alertBox.html('<div class="alert alert-success">' + response.message + '</div>');
  
            if (response.redirect) {
              setTimeout(function () {
                window.location.href = response.redirect;
              }, 1200);
            }
  
          } else {
            alertBox.html('<div class="alert alert-danger">' + response.message + '</div>');
          }
        },
  
        error: function (xhr, status, error) {
          console.log('AJAX STATUS:', status);
          console.log('AJAX ERROR:', error);
          console.log('SERVER RESPONSE:', xhr.responseText);
  
          alertBox.html(
            '<div class="alert alert-danger">' +
            'Something went wrong. Check console for server response.' +
            '</div>'
          );
        },
  
        complete: function () {
          submitBtn.prop('disabled', false);
          submitBtn.html('Continue');
        }
      });
    });
  
  });

  // This file handles the AJAX submission of both the signup form and the OTP verification form. It provides user feedback during the process and handles server responses gracefully.
  $(document).ready(function () {

    $('#profileForm').on('submit', function (e) {
      e.preventDefault();
  
      let form = $(this);
      let alertBox = $('#alertMessage');
      let submitBtn = $('#submitBtn');
      let formData = form.serialize();
  
      alertBox.html('');
  
      submitBtn.prop('disabled', true);
      submitBtn.html('<span class="spinner-border spinner-border-sm"></span> Sending...');
  
      $.ajax({
        url: 'config/send-code.php',
        type: 'POST',
        data: formData,
        dataType: 'json',
  
        success: function (response) {
  
          if (response.status === 'success') {
            alertBox.html('<div class="alert alert-success">' + response.message + '</div>');
  
            if (response.redirect) {
              setTimeout(function () {
                window.location.href = response.redirect;
              }, 1200);
            }
  
          } else {
            alertBox.html('<div class="alert alert-danger">' + response.message + '</div>');
          }
        },
  
        error: function (xhr, status, error) {
          console.log('AJAX STATUS:', status);
          console.log('AJAX ERROR:', error);
          console.log('SERVER RESPONSE:', xhr.responseText);
  
          alertBox.html(
            '<div class="alert alert-danger">' +
            'Something went wrong. Check console for server response.' +
            '</div>'
          );
        },
  
        complete: function () {
          submitBtn.prop('disabled', false);
          submitBtn.html('Continue');
        }
      });
    });
  
  });
  

  $(document).ready(function () {

    $('#loginForm').on('submit', function (e) {
      e.preventDefault();
  
      let form = $(this);
      let alertBox = $('#alertMessage');
      let submitBtn = $('#submitBtn');
      let formData = form.serialize();
  
      alertBox.html('');
  
      submitBtn.prop('disabled', true);
      submitBtn.html('<span class="spinner-border spinner-border-sm"></span> Sending...');
  
      $.ajax({
        url: 'config/send-code.php',
        type: 'POST',
        data: formData,
        dataType: 'json',
  
        success: function (response) {
  
          if (response.status === 'success') {
            alertBox.html('<div class="alert alert-success">' + response.message + '</div>');
  
            if (response.redirect) {
              setTimeout(function () {
                window.location.href = response.redirect;
              }, 1200);
            }
  
          } else {
            alertBox.html('<div class="alert alert-danger">' + response.message + '</div>');
          }
        },
  
        error: function (xhr, status, error) {
          console.log('AJAX STATUS:', status);
          console.log('AJAX ERROR:', error);
          console.log('SERVER RESPONSE:', xhr.responseText);
  
          alertBox.html(
            '<div class="alert alert-danger">' +
            'Something went wrong. Check console for server response.' +
            '</div>'
          );
        },
  
        complete: function () {
          submitBtn.prop('disabled', false);
          submitBtn.html('Continue');
        }
      });
    });
  
  });
  
