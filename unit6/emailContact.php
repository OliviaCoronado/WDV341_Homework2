<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("blueCube.jpg");
        }


        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=email] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #214eaf;
            color: White;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #d1d1ca;
        }

        input[type=reset] {
            background-color: #222d44;
            color: White;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=tel] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=reset]:hover {
            background-color: #d1d1ca;
        }


        .contact-container {
            width: 500px;
            background-color: #fff;
            box-shadow: 0 0 10px 0 #999;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
        }

        form {
            margin: 35px;
        }

        .input-field {
            width: 400px;
            height: 40px;
            margin-top: 20px;
            padding-left: 10px;
            border: 1px solid #777;
            border-radius: 14px;
            outline: none;


        }

    </style>

    <script>
        function lettersOnly(input) {       //will not let client put in numbers or special character
            let regex = /[^a-z]/gi;
            input.value = input.value.replace(regex, "");
        };
/*
        function numbersOnly(input){       //will not let client put in character or special character
            let regex = /[^1-9,-]/g;
            input.value= input.value.replace(regex, "");
        };
        */
       
     
    </script>

</head>

<body>

    <div class="contact-container">

        <form id="form1" name="form1" method="post" action="../unit6/formHandler.php">

            <legend style="text-align: center; font-size: 25px;">Contact Us:</legend>

            <!-- name and email-->
            <p>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" class="input-field" onkeyup="lettersOnly(this)"
                    required />
            </p>

            <p>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" class="input-field" onkeyup="lettersOnly(this)"
                    required />
            </p>
            <!--
            <p>
                <label for="phone_Number"> Phone Number:</label>
                <input type="tel" id="phone_Number" name="phone_Number" placeholder="123-456-7891"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required class="input-field">
            </p>
            -->
            <p>
                <label for="email_address"> Email:</label>
                <input type="email" name="email_address" id="email_address" placeholder="email@mail.com"
                    pattern="[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})"
                    class="input-field" required>

            </p><br>


            <!--Major - dropdown-->
            <p>
                <label for="contactReason"> Reason for Contact:</label>
                <select name="contactReason" id="contactReason" required>
                    <option value="">Choose</option>
                    <option value="Schedule A Call">Schedule A Call</option>
                    <option value="Customer Support">Customer Support</option>
                    <option value="Tech Support">Tech Support</option>
                    <option value="Career Options">Career Options</option>
                    <option value="Sales Rep.">Sales Rep.</option>
                    <option value="Other">Other</option>

                </select>
            </p>


            <!--textarea-->
            <p>Leave a comment:</p>
            <textarea rows="5" cols="50" name="comment" id="comment"></textarea>



            <p>
                <input type="submit" name="button" id="button" value="Submit" />
                <input type="reset" name="button2" id="button2" value="Reset" />
            </p>

        </form>
    </div>
    <p>&nbsp;</p>
</body>

</html>