<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project Name</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url(); ?>site/create_new_question">Add Questions <span class="sr-only">(current)</span></a></li>
        <li><a href="<?= base_url(); ?>site/display_questions">View Questions</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url(); ?>site/logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>