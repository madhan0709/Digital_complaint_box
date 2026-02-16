function showFields() {
    var role = document.getElementById("role").value;
    
    if (role === "student_s") {
        document.getElementById("student").style.display = "block";
        document.getElementById("admin").style.display = "none";
    } 
    else if (role === "admin_a") {
        document.getElementById("student").style.display = "none";
        document.getElementById("admin").style.display = "block";
    } 
    else {
        document.getElementById("student").style.display = "none";
        document.getElementById("admin").style.display = "none";
    }
}