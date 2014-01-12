<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);

        if ($name == "" OR $email == "" OR $message == "") {
            $error_message = "<div class='error'>Error! <i class='icon-danger-death-delete-destroy-skull-stream'></i><br />MISSING name, email or message</div>";
        }

        require 'class.phpmailer.php';

        $mail = new PHPMailer();

        if (!isset($error_message)) {
            $email_body = "";
            $email_body = $email_body . "Name: " . $name . "<br>";
            $email_body = $email_body . "Email: " . $email . "<br>";
            $email_body = $email_body . "Message: " . $message;

            $mail->SetFrom($email, $name);
            $mail->AddAddress('pollardld@gmail.com', 'David Pollard');
            $mail->Subject = "Contact from pollardld site" . $name;
            $mail->MsgHTML($email_body); 

            if($mail->Send()) {
                header("Location: contact.php?status=thanks");
                exit;
            } else {
              $error_message = "Error! <i class='icon-danger-death-delete-destroy-skull-stream'></i>: " . $mail->ErrorInfo;
            }
        }
    }

	include('header.php'); 
?>

	<div class="icon-layout">

	        <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
	            <section class="successful">

		            <article>
		            	<h2 class="success">
		            		<i class="icon-paperplane"></i>
		            		<a href="/">YIPEE</a>
		            	</h2>
		            </article>

		            <div>
		            	<img src="img/pterror.png" />
		            </div>
		        </section>
	        <?php } else { ?>

	        <?php
	            if (!isset($error_message)) {
	                echo '';
	            } else {
	                echo '<p class="message">' . $error_message . '</p>';
	            }
	        ?>

		<h1>Contact Me</h1>
		
		<section>
		
				<article>
					<h2><i class="icon-paperplane"></i></h2>
				</article>

				<div>
					<h2>Send Me A Message</h2>
					<form method="post" action="contact.php">
		                
		                <input placeholder="Name" type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
		               
		                <input placeholder="Email" type="email" name="email" id="email" value="<?php if (isset($name)) { echo htmlspecialchars($email); } ?>">
		               
		                <textarea placeholder="Message" name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
		               
		                <button type="submit" id="submit-button">Send</button>
		            
		            </form>
				</div>

			<?php } ?>

		</section>

		<section>

			<article>
				<h2><a href="http://www.google.com/+davidpollardgoogle" target="_blank"><i class="icon-google"></i></a></h2>
			</article>

			<div>
				<h2><a href="http://www.google.com/+davidpollardgoogle" target="_blank">Google+</a></h2>
				<p>Find me on Google plus</p>
			</div>

		</section>

		<section>

			<article>
				<h2><a href="http://www.linkedin.com/pub/david-pollard/28/206/a89" target="_blank"><i class="icon-linkedin"></i></a></h2>
			</article>

			<div>
				<h2><a href="http://www.linkedin.com/pub/david-pollard/28/206/a89" target="_blank">LinkedIn</a></h2>
				<p>Find me on LinkedIn</p>
			</div>

		</section>

		<section>
			
			<article>
				<h2><a href="http://instagram.com/diccfish" target="_blank"><i class="icon-fontawesome-webfont"></i></a></h2>
			</article>

			<div>
				<h2><a href="http://instagram.com/diccfish" target="_blank">Instagram</a></h2>
				<p>If you want to checkout my iPhone art, take a look at my Instagram feed.</p>
			</div>

		</section>

		<section>

			<article>
				<h2><a href="https://www.facebook.com/DavLawPo" target="_blank"><i class="icon-facebook"></i></a></h2>
			</article>

			<div>
				<h2><a href="https://www.facebook.com/DavLawPo" target="_blank">Facebook</a></h2>
				<p>Here is my Facebook, complete with security features that hide my alchol photos.</p>
			</div>

		</section>

	</div>

<?php include('footer.php');