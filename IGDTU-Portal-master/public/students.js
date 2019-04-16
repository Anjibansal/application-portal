function fetchStudents(done) {
  $.get("/api/students", function(data) {
    done(data);
  });
}

function addStudent(name, email, phone, password, done) {
  $.post(
    "/api/students",
    {
      name: name,
      email: email,
      phone: phone,
      password: password
    },
    function(data) {
      done(data);
    }
  );
}

function createStudentCard(student) {
  return $(`
    <div class="col-4 card mx-2 p-4">
        <h4 class="student-name">${student.name}</h4>
        <div class="student-email">${student.email}</div>
        <div class="row">
            <div class="col m-3 p-3">
                <b>${student.phone}</b>
            </div>
        </div>
    </div>`);
}
