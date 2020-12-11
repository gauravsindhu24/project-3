<div class="container">
    <div class="row">
    <?php if($this->session->flashdata('del_ques') !=null ): ?>
        <div class="alert alert-danger" role="alert">
            <center><?= $this->session->flashdata('del_ques'); ?></center>
        </div>
    <?php endif; ?>

        <h2>Welcome: <?= ucfirst($this->session->userdata('f_name')) . " " . ucfirst($this->session->userdata('l_name')); ?></h2>
        <h3>View Questions:</h3>
    </div>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Questions Name</th>
        <th>Questions Body</th>
        <th>Questions Skills</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php ;
    ?>
    <?php if(isset($all_ques)): ?>
    <?php foreach($all_ques as $question): ?>
      <tr>
        <td><?= $question->ques_name; ?></td>
        <td><?= $question->ques_body; ?></td>
        <td><?= $question->ques_skills; ?></td>
        <td><a href="<?= base_url(); ?>site/display_edit_question/<?= $question->ques_id; ?>" class="btn btn-success">Edit</a> | <a href="<?= base_url(); ?>site/delete_question/<?= $question->ques_id; ?>" class="btn btn-danger">Delete</a></td>
      </tr>
    <?php endforeach; ?>
    <?php endif;  ?>
    </tbody>
  </table>
</div>