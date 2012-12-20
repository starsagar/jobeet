<?php
/**
 * Description of components
 *
 * @author martial
 */
class languageComponents extends sfComponents
{
  public function executeLanguage(sfWebRequest $request)
  {
    $this->form = new sfFormLanguage(
      $this->getUser(),
      array('languages' => array('en', 'fr'))
    );
    $this->form->disableLocalCSRFProtection();
  }
}
?>
