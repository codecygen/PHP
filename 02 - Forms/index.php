<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Simple HTML Form</title>
        <style type="text/css">
            label{
                font-weight: bold;
                color: #300ACC;
            }
        </style>
    </head>
    
    <body>
        <!-- HTML form begins here -->
        <form action="handle_form.php" method="post">
            <fieldset>
                <legend>Enter your information in the form below:</legend>
                <p><label for="Name">Name: </label>
                <input type="text" name="name" id="Name" size="25" maxlength="40"
                       placeholder="Enter your name here..."></p>
                
                <p><label for="Email">Email Address: </label>
                <input type="email" name="email" id="Email" size="25" maxlength="40"
                       placeholder="Enter your email here..."></p>
                
                <p>Please choose your gender: </p>
                <p><label for="Male">Male </label>
                <input type="radio" name="gender" id="Male" value="male">
                
                <label for="Female">Female </label>
                <input type="radio" name="gender" id="Female" value="female"></p>
                
                <label for="Age">Enter your age </label>
                <select name="age" id="Age">
                    <option value="0-29">Under 30</option>
                    <option value="30-60">Between 30 and 60</option>
                    <option value="60+">Over 60</option>
                </select>
                
                <p><label for="Notes">Comments</label>
                <textarea rows="3" cols="40" name="notes" id="Notes" placeholder="Put your comments here..."></textarea></p>
            </fieldset>
            
            <p align="center"><input type="submit" name="submit" value="Submit Credentials"></p>
            
        </form>
    </body>
</html>
