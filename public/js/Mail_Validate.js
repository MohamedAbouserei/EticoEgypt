
  $( "#sendmail" ).validate({
    rules: {
      name: {
        required: true,
        minlength:3,
      },
      subject: {
        required: true,
        minlength:3,
      },
      email: {
        required: true,
        email:true,

      },
      message: {
        required: true,
        minlength:3,
      },
    }
  });
