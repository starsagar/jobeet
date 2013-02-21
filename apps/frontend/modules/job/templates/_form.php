<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo form_tag_for($form, '@job') ?>
  <table class="tesstesst"  id="job_form">
    <tfoot>
      <tr>
        <td colspan="2">
          <input type="submit" value="Preview your job" />
        </td>
      </tr>
    </tfoot>
    <div class="testclass">tttttttttttttttttttttttttttttttttttttttt</div>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>

<?php echo form_tag_for($form, '@job') ?>
  <table class="tesstesst"  id="job_form">
    <tfoot>
      <tr>
        <td colspan="2">
          <input type="submit" value="Preview your job" />
        </td>
      </tr>
    </tfoot>
    <div class="testclass">rrrrrrrrrrrrrrrrrrrrrrr</div>
    <tbody>
      <?php echo "hello am here".$form ?>
    </tbody>
  </table>
</form>
<div>
  testing my data 
</div>
