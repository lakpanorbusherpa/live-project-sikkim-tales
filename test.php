<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>
    <section class="comments-section">
  <div class="comment">
    <div class="user-icon">
      <i class="fa-solid fa-user"></i>
    </div>
    <div class="comment-content">
      <div class="comment-header">
        <strong>Ricky Gervais</strong> <span>1 day ago</span>
      </div>
      <div class="comment-text">
        Hi Samira, I like your thoughts on this, but I'd like to see it on a dark T-shirt, can you fix that?
      </div>
    </div>
  </div>

  <div class="comment">
    <div class="user-icon">
      <img src="user2.jpg" alt="User 2" class="user-img">
    </div>
    <div class="comment-content">
      <div class="comment-header">
        <strong>You</strong> <span>3 weeks, 1 day ago</span> | <a href="#">Delete</a>
      </div>
      <div class="comment-text">
        Glad you like it. I’ll upload another approach later this day.
      </div>
    </div>
  </div>

  <div class="comment">
    <div class="user-icon">
      <img src="user1.jpg" alt="User 1" class="user-img">
    </div>
    <div class="comment-content">
      <div class="comment-header">
        <strong>Ricky Gervais</strong> <span>3 days ago</span>
      </div>
      <div class="comment-text">
        Thanks, looking forward to it!
      </div>
    </div>
  </div>

  <div class="comment">
    <div class="user-icon">
      <img src="user3.jpg" alt="User 3" class="user-img">
    </div>
    <div class="comment-content">
      <div class="comment-header">
        <strong>Ricky Gervais</strong> <span>20 mins ago</span>
      </div>
      <div class="comment-text">
        Liked it a lot!
      </div>
    </div>
  </div>
  <style>
  			.comments-section {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
}

.comment {
  display: flex;
  margin-bottom: 20px;
}

.user-icon {
  margin-right: 15px;
}

.user-img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.comment-content {
  flex: 1;
}

.comment-header {
  font-size: 14px;
  color: #555;
}

.comment-header strong {
  font-weight: bold;
  font-size: 16px;
}

.comment-header span {
  color: #aaa;
  margin-left: 5px;
}

.comment-header a {
  color: #007bff;
  text-decoration: none;
}

.comment-text {
  margin-top: 5px;
  font-size: 15px;
}

@media (max-width: 768px) {
  .comment {
    flex-direction: column;
  }

  .user-icon {
    margin-bottom: 10px;
  }
}

  
  </style>
</section>
</html>