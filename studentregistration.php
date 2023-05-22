<form action="./Student/addstudent.php" method="POST">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"><b><i class="fa-solid fa-user"></i>
                                Name</b></label><small id="msg1"></small>
                        <input type="text" class="form-control" id="Sname" name="name"
                            placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label"><b><i class="fa-solid fa-envelope"></i>
                                Email</b></label><small id="msg2"></small>
                        <input type="email" class="form-control" id="Smail" name="mail"
                            placeholder="Enter your e-mail">
                        <pre> <small style="color: red;">* We will never share your details</small></pre>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label"><b><i class="fa-solid fa-lock"></i>
                                Password</b></label><small id="msg3"></small>
                        <input type="password" class="form-control" id="Spassword" name="password"
                            placeholder="Enter your passowrd">
                    </div>
                </form>