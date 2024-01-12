<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link rel="stylesheet" href="book.css">
</head>
<body>
    <nav>
        <img src="logot.png" alt="" class="logo">
        <ul>
           <li><a href="journal.html" >Journal Publication</a></li>
            <li><a href="book.html" id="boo">Book Publication</a></li>
            <li><a href="patent.html">Patents</a></li>
            <li><a href="fdp.html">FDP</a></li>
            <li><a href="report.html">Reports</a></li>
            
            <li><a href="faculty.html">Add Faculty</a></li>
            <li><a href="register.html">Registered Faculty</a></li>
            <li><a href="index.html">Home</a></li>            
        </ul>
    </nav>
    <div class="container">
        <br><br>
        <form action="">
            <label for="name" class="lblform">Faculty Name : </label>
            <input type="text"  id="facultyname " class="demo" placeholder="Enter faculty name"><br><br>

            <label for="id" class="lblform">Faculty Id : </label>
            <input type="text" id="facultyid" class="demo" placeholder="Enter faculty id"> <br><br>

            <label for="department" class="lblform"> Department : </label>
            <select name="" id="department" class="demo1">
                <option value="department">Select your department</option>
                <option value="mca">MCA</option>
                <option value="mba">MBA</option>
                <option value="cse">CSE</option>
                <option value="it">IT</option>
                <option value="ml">ML</option>
                <option value="cs">CS</option>
                <option value="csit">CSIT</option>
                <option value="me">ME</option>
                <option value="aiml">AI-ML</option>
                <option value="bpharma">B-PHARMA</option>
                <option value="mpharma">M-PHARMA</option></select><br><br>

                <label for="" class="lblform">Title of the Published Book : </label>
                <input type="text" name="" id="" class="demo" placeholder="Enter the title of the published book"> <br><br>

            <label for="affiliation" class="lblform">KIET Affiliated : </label>
            <select id="affiliated" class="demo1"><br><br>
                <option value="NA">Select your affiliation</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br><br>

            <label for="publisher" class="lblform">Address of the publisher : </label>
            <input type="text" id="publisher" class="demo" placeholder="Enter the address of the publisher"><br><br>

            <label for="" class="lblform">Edition Number : </label>
            <input type="number" name="" id="" class="demo" placeholder="Enter edition number"><br><br>

            <label for="datepublication" class="lblform">Date of the publication : </label>
            <input type="date" id="datepublication" class="demo"><br><br>

            <label for="" class="lblform">Publisher Type : </label>
            <select name="" id="" class="demo1">
                <option value="NA">Select publisher type</option>
                <option value="national">National</option>
                <option value="international">International</option>
            </select><br><br>

            <label for="" class="lblform">Name of all Book Editors/ Authors : </label>
            <input type="text" name="" id="" class="demo" placeholder="Order of the authors will be same as in Book, seperated by commas. " ><br><br>

            <label for="" class="lblform">KIET faculty ID of all Editor / Authors : </label>
            <input type="number" name="" id="" placeholder="Enter faculty id of all editor." class="demo"><br><br>

            <label for="" class="lblform">Book Indexing : </label>
            <input type="number" name="" id="" class="demo"><br><br>

            <label for="" class="lblform">Please Map Outcome with the following SDGs (SDG (1-17)) : </label>
            <input type="number" name="" id="" class="demo"> <br><br>

            <label for="" class="lblform">Is the research with outside Institutions in collaboration : </label>
            &emsp;<input type="radio" name="ok" id="" >Yes &emsp;
            <input type="radio" name="ok" id="">No <br><br>

            <label for="" class="lblform">Name of persons (Outside the KIET Institution) : </label>
            <input type="text" name="" id="" class="demo"> <br><br>

            <label for="" class="lblform">Name of the Outside Institutions / Organizations : </label>
            <input type="text" name="" id="" class="demo"> <br><br>

            <label for="" class="lblform">Complete Weblink for the publication :  </label>
            <input type="text" name="" id="" class="demo" placeholder="Enter the complete Weblink for the publication "><br><br>

            <label for="" class="lblform">Upload the proof for the published book/ chapter : </label>
            <input type="file" name="" id="" class="demo" placeholder="KIET Affiliation and Author name must reflect in pdf."><br><br>

            <label for="" class="lblform">Departmental DRC Recommendation : </label>
            &emsp;<input type="radio" name="drc" id="" > Recommended &emsp;
            <input type="radio" name="drc" id="" > Not Recommended<br><br>


           <input type="submit" name="" id="submit">
        </form>
    </div>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','facultydb');
// echo"connected successfully";

?>