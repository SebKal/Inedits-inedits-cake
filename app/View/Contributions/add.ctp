<!-- META -->
<?php $this->assign('title', 'Ajouter une contribution') ?>

<!-- VIEW BLOCKS -->
<?php
  $this->start('cover');
    echo $this->element('contributions/add-cover');
  $this->end();
?>

<section class="container-fluid">
  <div class="container" id="registration">
    <div class="row">
      <?php echo $this->Form->create('Contribution', array('type'=>'file', 'url' => array('controller' => 'contributions', 'action' => 'add', 'arbre' => $tree['Tree']['slug'], 'contribution' => $parentContribution['Contribution']['id'], 'user' => $currentUser['id']), 'inputDefaults' => array('div' => false, 'class' => 'form-control', 'label' => false) ));?>
        <div class="col-xs-12 col-sm-8 registration-wrapper">
          <div class="box">
            <h4>Vos informations personnelles <span class="bubble">1</span></h4>

            <div class="form-group">
              <?php echo $this->Form->input('name', array('class'=> 'form-control', 'div' => '', 'label' => '', 'placeholder' => 'Votre prénom', 'value' => $currentUser['name'])); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->input('last_name', array('class'=> 'form-control', 'div' => '', 'label' => '', 'placeholder' => 'Votre nom', 'value' => $currentUser['last_name'])); ?>
            </div>
          </div>
          <div class="box">
            <h4>Votre Histoire <span class="bubble">2</span></h4>
            <div class="form-group">
              <?php echo $this->Form->input('title', array('class'=> 'form-control', 'div' => '', 'label' => '', 'placeholder' => 'Titre de la contribution')); ?>
            </div>
            <h4>Nous envoyer votre document</h4>
            <div class="letters-count hide">
              <span>Nombre de caractères : </span>
              <span class="letters-count-number"></span>
            </div>
            <div class="form-group custom-wyz">
              <i class="glyphicon glyphicon-user hide dismiss-textarea"></i>
              <?php echo $this->Form->input('content', array('label'=> '', 'class' => 'wysiwyg-input', 'novalidate' => 'novalidate'));?>
            </div>
            <div class="row text-actions">
              <div class="col-xs-12 col-sm-6">
                <div class="form-group custom-input-file">
                  <i class="glyphicon glyphicon-cloud-upload"></i>
                  <?php echo $this->Form->input('path_file', array('div' => '', 'type'=> 'file', 'label' => 'Envoyer un fichier<br/><small>(.doc, docx, .pdf, .txt)<br/>Recommandé</small>', 'class' => ''));?>
                  <div id="fakeFileName" class="clearfix well well-sm opaq">
                    <span></span>
                    <button id="resetAddContribForm" class="glyphicon glyphicon-remove pull-right" type="button"></button>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="custom-textarea-action">
                  <p><i class="glyphicon glyphicon-edit"></i>Ecrire en ligne<br/><small>En utilisant notre outil</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="row">
              <div class="col-sm-12">
                <h4>Conditions générales d'utilisation <span class="bubble">3</span></h4>
                <div class="charte">
                  <?php echo $this->element('cgu'); ?>
                </div>
                <div class="form-group">
                  <?php echo $this->Form->input('conditions', array('class'=> 'form-control', 'id' => 'check-charte', 'type' => 'checkbox', 'label' => 'j\'ai lu et j\'accepte les conditions générales d\'utilisation')); ?>
                </div>
                <button class="btn btn-shadow-yellow register-btn" disabled>Envoyer</button>
              </div>
              <span class="last-bubble">></span>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-sm-offset-1 info-participer advice">
          <p class="icon-wrapper"><i class="glyphicon glyphicon-info-sign"></i></p>
          <p class="warn">Conseil</p>
          <p>- Faites intervenir au moins UN des protagonistes impliqués dans l’histoire</p>
          <p>- Ne négligez aucun élément/détail mentionné dans les contributions précédentes : efforcez-vous au contraire de les reprendre à votre compte au profit de votre propre récit</p>
          <p>- Evitez les ruptures de style ou de ton trop marquées, qui pourraient nuire à la continuité de l’ensemble.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-sm-offset-1 info-participer">
          <p class="icon-wrapper"><i class="glyphicon glyphicon-warning-sign"></i></p>
          <p class="warn">Important</p>
          <p>
            - Toutes les contributions sont validées par notre équipe.
          </p>
          <p>
            - Vous reconnaissez être l'auteur original du texte que vous souhaitez ajouter.
          </p>
          <p>
            - La taille minimale d'une contribution est de 3000 caractères et la taille maximale, 7000.
          </p>
        </div>
      <?php echo $this->Form->end();?>
    </div>
  </div>
</section>
