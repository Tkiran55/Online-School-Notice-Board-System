<!DOCTYPE html>
<html>
  <head>
    <title>Create Notice</title>
  </head>
  <body>
      <center><h3>ADD NOTICE</h3></center>
      <div>
        <form action="" method="post">
          <div class="form-group">
              <label>To Whom:</label>
              <select class="form-control" name="to_whom">
                <option>To All</option>
                <option>To Class 11</option>
                <option>To Class 12</option>
              </select>

          </div>
          <div class="form-group">
            <label>Post Date:</label>
            <input type="date" class="form-control" name="post_date">
          </div>
          <div class="form-group">
            <label>Subject:</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-success"name="send_notice">Send Notice</button>
        </form>
      </div>
  </body>
</html>
