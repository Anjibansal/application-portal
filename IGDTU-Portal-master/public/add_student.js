$(function() {
  let studentName = $("#studentName");
  let studentEmail = $("#studentEmail");
  let studentPhone = $("#studentPhone");
  let studentPass = $("#studentPass");

  $("#btnStudentAdd").click(function() {
    addStudent(
      studentName.val(),
      studentEmail.val(),
      studentPhone.val(),
      studentPass.val(),
      function() {
        window.alert("User successfully registered");
      }
    );
  });
});
