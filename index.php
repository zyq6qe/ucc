<?php
include "base.php";
?>

<div class="container">
    <br/>
    <h1>Register</h1>
    <br/>
    <form action="confirm.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <input type="checkbox" name="check_list[]" value="ACCT">
                <label>Accounting</label>

                <br/><input type="checkbox" name="check_list[]" value="FIN">
                <label>Finance</label>

                <br/><input type="checkbox" name="check_list[]" value="MARKADV">
                <label>Marketing & Advertising</label>

                <br/><input type="checkbox" name="check_list[]" value="CONS">
                <label>Consulting</label>

                <br/><input type="checkbox" name="check_list[]" value="SALES">
                <label>Sales</label>

                <br/><input type="checkbox" name="check_list[]" value="DA">
                <label>Data Analytics</label>

                <br/><input type="checkbox" name="check_list[]" value="BUSO">
                <label>Business - Other</label>

                <br/><input type="checkbox" name="check_list[]" value="ENG">
                <label>General Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="BIOMED">
                <label>Biomedical Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="CHEME">
                <label>Chemical Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="CSCPE">
                <label>Computer Science & Computer Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="CIVILENV">
                <label>Civil & Environmental Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="MECHAERO">
                <label>Mechanical & Aerospace Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="EE">
                <label>Electrical Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="SYS">
                <label>Systems Engineering</label>
            </div>
            <div class="col-md-6">
                <br/><input type="checkbox" name="check_list[]" value="MSE">
                <label>Material Science & Engineering</label>

                <br/><input type="checkbox" name="check_list[]" value="SCI">
                <label>Science</label>

                <br/><input type="checkbox" name="check_list[]" value="TECH">
                <label>Technology</label>

                <br/><input type="checkbox" name="check_list[]" value="NSA">
                <label>National Security & Intelligence</label>

                <br/><input type="checkbox" name="check_list[]" value="COMMSERV">
                <label>Community & Social Services</label>

                <br/><input type="checkbox" name="check_list[]" value="PSGO">
                <label>Public Service & Government - other</label>

                <br/><input type="checkbox" name="check_list[]" value="POLI">
                <label>Policy Research</label>

                <br/><input type="checkbox" name="check_list[]" value="EDU">
                <label>Education K-12</label>

                <br/><input type="checkbox" name="check_list[]" value="COUNS">
                <label>Counseling</label>

                <br/><input type="checkbox" name="check_list[]" value="YOUTH">
                <label>Youth Development</label>

                <br/><input type="checkbox" name="check_list[]" value="ARTS">
                <label>Performing Arts</label>

                <br/><input type="checkbox" name="check_list[]" value="MEDIA">
                <label>Media (Journalism, writing, broadcasting, film)</label>

                <br/><input type="checkbox" name="check_list[]" value="DESIGN">
                <label>Design</label>
            </div>
        </div>
        <br/><input class="btn btn-success" id="mybutton" type="submit"/>
    </form>
</div>