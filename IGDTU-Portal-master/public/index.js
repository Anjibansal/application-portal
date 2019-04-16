$(function () {

    let studentList = $('#student-list')

    fetchStudents(function (students) {
        studentList.empty()
        for (student of students) {
            studentList.append(createStudentCard(student))
        }
    })

})