<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册页面</title>
</head>
<body>
	<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

                

                <div class="tab-container">

                    <div class="tab-content clearfix" id="tab-register">
                        <div class="panel panel-default nobottommargin">
                        	<div class="panel-body" style="padding: 40px;">

                        		<form id="register-form" name="register-form" class="nobottommargin" action="/register" method="post">

		                            <div class="col_full">
		                                <label for="register-form-email">邮箱地址:</label>
		                                <input type="text" id="register-form-email" name="email" value="" class="form-control" />
		                            </div>

		                            <div class="col_full">
		                                <label for="register-form-username">用户名:</label>
		                                <input type="text" id="register-form-username" name="username" value="" class="form-control" />
		                            </div>


		                            <div class="col_full">
		                                <label for="register-form-password">密码:</label>
		                                <input type="password" id="register-form-password" name="password" value="" class="form-control" />
		                            </div>

		                            <div class="col_full">
		                                <label for="register-form-repassword">确认密码:</label>
		                                <input type="password" id="register-form-repassword" name="repassword" value="" class="form-control" />
		                            </div>

		                            <div class="col_full nobottommargin">
		                            	{{csrf_field()}}
		                                <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">立即注册</button>
		                            </div>

		                        </form>
                        	</div>
                        </div>
                    </div>

                </div>

            </div>

		</div>

	</div>
	</section>
</body>
</html>