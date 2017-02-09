  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {$fil}
        <small>Gestionnaire</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Fil d'ariane</a></li>
        <li class="active">{$fil}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-person"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Utilisateurs</span>
              <span class="info-box-number">{$countUsers}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-people"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Groupes</span>
              <span class="info-box-number">{$countGroups}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Trésorerie</span>
              <span class="info-box-number">{$sumTresorerie}<small>€</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-person-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nouveaux membres</span>
              <span class="info-box-number">{$newUsers}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <section class="content-header">
          <h1>
            {$titleUser|upper}
            <small></small>
          </h1>
        </section>
        <br>

        <!-- BOUCLE DES UTILISATEURS RECENTS -->

        {foreach from=$recentsUsers item=Users}
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active"  style="background: url('upload_files/group_cover/{$Users.group_cover}') center center;">
                <!-- <div class="caption-title"> -->
              <a href="index.php?gestion=users&action=detailsU&id={$Users.user_id}"><h3 class="widget-user-username caption-title_user">{$Users.user_name} {$Users.user_firstname} - {$Users.group_name}</h3></a>
       <!--        </div> -->
              <h5 class="widget-user-desc"></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" style="background: #FFFFFF; border-color: lightgray" src="upload_files/user_avatar/{$Users.user_profilPicture}" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">{$Users.user_birth}</h5>
                    <span class="description-text">ANS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">{$Users.usertype_name}</h5>
                    <span class="description-text">{$Users.paid}</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">{$Users.user_dateCreation|date_format:"%d %B %Y"|utf8_encode}</h5>
                    <span class="description-text">MEMBRE DEPUIS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>

        {/foreach}

        <!-- FIN BOUCLE DES UTILISATEURS RECENTS -->

        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="row">
        <section class="content-header">
          <h1>
            {$titleGroup|upper}
            <small></small>
          </h1>
        </section>
        
        <br>
        {foreach from=$recentsGroups item=Groups}
        <div class="col-md-4">
          
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow" style="background: url('upload_files/group_cover/{$Groups.group_cover}') center center;">
            <!-- <img class="img" src="upload_files/group_cover/{$Groups.group_cover}" alt="User Avatar"> -->
              <div class="widget-user-image">
              <img class="img-circle" src="upload_files/group_avatar/{$Groups.group_avatar}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <a href="index.php?gestion=groups&action=detailsG&id={$Groups.group_id}"><h3 class="widget-user-username caption-title-group">{$Groups.group_name}</h3>
             <a href="index.php?gestion=groups&action=detailsG&id={$Groups.group_id}"><h5 class="widget-user-desc caption-title-activity">{$Groups.group_activity}</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Membres <span class="pull-right badge bg-blue">{$Groups.count_users_per_group}</span></a></li>
                <li><a href="#">Créé le <span class="pull-right badge bg-green">{$Groups.group_dateCreation|date_format:"%d %B %Y"|utf8_encode}</span></a></li>
              </ul>
            </div>
          </div>
         
          <!-- /.widget-user -->
        </div>
         {/foreach}
     
      <!-- /.box -->
    </div>


  </section>
  <!-- /.content -->
</div>