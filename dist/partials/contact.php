 <section class="contact light" id="contact">
          
          
        <h2 class="">Contact me</h2>
      
        <p class="">Do you have any questions? Please do not hesitate to contact me directly.</p>
        <p class="">You can also contact me on &nbsp; <strong>lorikkrasniqi1@gmail.com</strong> </p>

        <div class="container">
          <form action="./include/contactForm.php" method="POST">
            
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>

            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:100px" required></textarea>

            <input type="submit" value="Submit">
          </form>
        </div>

      </section>