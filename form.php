

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <title>Responsive Regisration Form </title>
    <style>input[type=submit]{
    border: none;
    color: white;
    background: none;
}</style> 
</head>
<body>
    <header>
        <div class="logo">
            <p>godavari college of engineering , jalagon</p>
        </div>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">search </a></li>
                <li><a href="">table</a></li>
               
            </ul>
        </nav>
        
    </header>

         <div class="list">
    <div class="container">
        <!-- <header>Registration</header> -->

        <form action="insert.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Entry Form</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required name="fulname">
                        </div>

                        <div class="input-field">
                            <label>Date </label>
                            <input type="date" placeholder="Enter date"  name="date">
                        </div>
                        
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" placeholder="Enter mobile number" required  name="m_no">
                        </div>
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter your Address" required name="address">
                        </div>

                        
                        <div class="input-field">
                            <label>Purpose</label>
                            <input type="text" placeholder="Enter your Purpose" required name="purpose">
                        </div>


                        <div class="input-field">
                            <label>Companion</label>
                            <input type="text" placeholder="Enter your Companion" required name="companion">
                        </div>
                    </div>
                </div>

            
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <a href="logout.php" class="btn btn-dark">Logout</a>
                        </div>
                        
                        <button type="submit" value="submit" name="submi class="sumbit">
                            <span class="btnText"><input  type="submit" value="Submit" name="submit"></span>
                             <i class="uil uil-navigator"></i>
                        </button> 
                    </div>
                </div> 
            </div>
        </form>
    </div>
</div>

   
</body>
</html>
