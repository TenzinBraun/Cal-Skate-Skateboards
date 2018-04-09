



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cal Skate Skateboards</title>
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.css">
</head>
<body>
<header>
    <!-- TODO: Put the navbar here we need to be ok with the design of it -->
</header>

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-4"></div>
        <div class="col-lg-4">

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="form-control col-lg-10">
                    <form method="post" action="validateRegistration.php">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <label class="form-group">
                                    <input type="text" placeholder="First Name" name="firstName" required>
                                </label>

                                <label class="form-group">
                                    <input type="text" placeholder="Name" name="name" required>
                                </label>

                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <label >
                                            <input class="col-lg-12" type="number" placeholder="Day" name="day"required>
                                        </label>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>
                                            <input class="col-lg-12" type="number" placeholder="Month" name="month" required>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <input class="col-lg-12" type="number" placeholder="Year" name="year" required>
                                        </label>
                                    </div>
                                </div>

                                <label class="form-group">
                                    <input type="email" placeholder="Email Address" name="emailAddress" required>
                                </label>

                                <label class="form-group">
                                    <input type="password" placeholder="Password" name="password" required>
                                </label>

                                <label class="form-group">
                                    <input type="password" placeholder="Confirm Password" name="confirmPassword" required>
                                </label>

                                <label class="form-group"><input type="checkbox" required>I agree with the term of use </label>

                                <button class="btn-primary" type="submit">Create your Account</button>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

</body>
</html>