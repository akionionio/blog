<?php
/**
 * Template Name: contact-index
 */
  //操作アクションを取得
 require_once('init.php');
 require_once('validates.php');

 $act = isset($_POST["act"]) ? intval($_POST["act"]) : 1;
 
 if ($act == 1) {
 	// セッションデータクリア
 	$contact_data = array();
 	// 初期値セット
 	$err_msg = array();
 	$name = '';
 	$email = '';
 	$message = '';
 
 } elseif ($act == 2) { // 確認ボタンを押下された場合
 	// POSTデータをセッションに格納
 	$_SESSION["contact_data"] = isset($_POST["contact_data"]) ? $_POST["contact_data"] : array();
 	// セッションデータを配列にセット
 	$contact_data = $_SESSION["contact_data"];
 	// 各項目データをセット
 	$name = isset($contact_data["name"]) ? $contact_data["name"] : "";
 	$email = isset($contact_data["email"]) ? $contact_data["email"] : "";
 	$message = isset($contact_data["message"]) ? $contact_data["message"] : "";
 	// 入力チェック
 	$err_msg = checkInputData($contact_data);
 	if(!$err_msg){
 		header("Location: http://akionionio.com/contact-confirm/");
 		exit();
 	}
 
 } else {
 	// セッションデータ取得
 	$contact_data = isset($_SESSION["contact_data"]) ? $_SESSION["contact_data"] : array();
 	// 各項目データをセット
 	$name = isset($contact_data["name"]) ? $contact_data["name"] : "";
 	$email = isset($contact_data["email"]) ? $contact_data["email"] : "";
 	$message = isset($contact_data["message"]) ? $contact_data["message"] : "";
 }

 
get_header(); ?>
 
<div id="main" class="fixed-page"> 
  <?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
  <?php endwhile; ?>
		
	<?php if (count($err_msg) > 0) { ?>
	<div>
		<ul class="error">
			<?php foreach ($err_msg as $msg) { ?>
			<li class="red"><?php echo $msg; ?></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>

	<div class="page-content">
		<p class="mb30">以下を入力し確認するボタンを押してください。<span class="red">*</span>は入力必須です。</p>

		<form class="form-horizontal" name="contactform" role="form" method="post" action="" novalidate>
			<div class="form-group">
				<label for="inputName" class="control-label">お名前<span class="red">*</span></label>
				<div>
					<input type="text" class="form-control" name="contact_data[name]" placeholder="お名前" value="<?php echo htmlspecialchars($name); ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="control-label">メールアドレス<span class="red">*</span></label>
				<div>
					<input type="email" class="form-control" name="contact_data[email]" placeholder="メールアドレス" value="<?php echo htmlspecialchars($email); ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputMessage" class="control-label">お問い合わせ内容<span class="red">*</span></label>
				<div>
					<textarea class="form-control" name="contact_data[message]" rows="10" cols="40"><?php echo htmlspecialchars($message); ?></textarea>
				</div>
			</div>
			<div class="btn-area">
				<button type="submit" name="btnSubmit" class="btn btn-success">確認する<i class="fa fa-arrow-circle-right"></i></button>
				<input type="hidden" name="act" value="2">
			</div>
		</form>
	</div>
</div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>