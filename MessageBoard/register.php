<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="css/bootstrap.css" />
    
	<!--<script type="text/javascript" src="js/jquery1.12.4.js" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>-->
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <!--<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <!--<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="style/login.css" />
	<title>注册页面</title>
</head>
<body>
	<div class="container">
		<div class="row">
			 <div class="span4">
			 	
			 	<form class="form-horizontal" action="registerDo.php" method="post" enctype="multipart/form-data">
			 		<legend>Register</legend>
			 	    <div class="form-group">
					    <label for="username" class="col-sm-3 control-label">UserName:</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control username" name="username" id="username"  placeholder="UserName"/>
					    </div>
					</div>
					<div class="form-group">
					    <label for="password" class="col-sm-3 control-label">PassWord:</label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control password" name="password" id="password" placeholder="Password"/>
					    </div>
					</div>
			 	    <div class="form-group">
			 	    	<label for="gender" class="col-sm-3 control-label">性别:</label>
			 	    	<label class="radio-inline">
						   <input type="radio" name="gender" class="gender" value="男" checked="checked">男
						</label>
						<label class="radio-inline">
						   <input type="radio" name="gender" class="gender" value="女">女
						</label>

			 	    </div>
				    
				    <div class="form-group">
				    	<label for="inputPassword3" class="col-sm-3 control-label">职位:</label>
				    	<div class="col-sm-6">
				    		<input type="hidden" name="position" id="position"/>
				    		<select class="form-control position">
								<option>美国前国防部长</option>
								<option>著名作家</option>
								<option>建筑师</option>
								<option>政治家</option>
								<option>商人</option>
							</select>
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label for="inputPassword3" class="col-sm-3 control-label">爱好:</label>
				    	<div class="col-sm-9">
				    		<label class="checkbox-inline">
							   <input type="checkbox" name="hobby[]" class="hobby" value="吃" checked="checked">吃
							</label>
							<label class="checkbox-inline">
							   <input type="checkbox" name="hobby[]" class="hobby" value="喝">喝
							</label>
							<label class="checkbox-inline">
							   <input type="checkbox" name="hobby[]" class="hobby" value="玩儿">玩儿
							</label>
							<label class="checkbox-inline">
							   <input type="checkbox" name="hobby[]" class="hobby" value="乐">乐
							</label>
							<label class="checkbox-inline">
							   <input type="checkbox" name="hobby[]" class="hobby" value="K歌">K歌
							</label>
							<label class="checkbox-inline">
							   <input type="checkbox" name="hobby[]" class="hobby" value="睡觉">睡觉
							</label>
				    	</div>
				   </div>
				    <div class="form-group">
				  	    <label for="inputPassword3" class="col-sm-3 control-label">File input:</label>
				        <div class="col-sm-8">
				    	    <input type="file" name="iconhead" class="iconhead">
				    	    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
				    	    <p class="help-block">Example block-level help text here.</p>
				        </div>
				    </div>
				    <div class="form-group">
				  	    <label for="inputPassword3" class="col-sm-3 control-label">个人简介:</label>
				        <div class="col-sm-8">
				    	    <textarea class="form-control textarea" name="summary" rows="3"></textarea>
				        </div>
				    </div>
				    
				    <div class="form-group">
					     <label for="inputPassword3" class="col-sm-3 control-label">Remember me?:</label>
					      <div class="col-sm-8">
					        <label class="checkbox-inline">
							   <input type="checkbox" id="inlineCheckbox3" value="option3"> Remember me.
							</label>
					      </div>
					    </div>
				    </div>
				    <div class="form-group">
				    	<label for="inputPassword3" class="col-sm-3 control-label"></label>
					    <div class="col-sm-8">
					    	<a class="help-block" href="login.php">Already registered? Now , To Login .</a>
					    </div>	
				    </div>
				   
					<div class="form-group">
					    <div class="col-sm-offset-3 col-sm-6">
					      <button type="submit" class="btn btn-primary btn-lg">Register</button>
					    </div>
					</div>    
				</form>
			</div>
		</div>
    </div>
    <script src="js/register.js" charset="UTF-8"></script>
</body>
</html>