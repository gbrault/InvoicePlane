<script>
    $(function () {
        <?php $this->layout->load_view('clients/script_select2_client_id.js'); ?>
    });
</script>

<form method="post">

    <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
           value="<?php echo $this->security->get_csrf_hash() ?>">

    <div id="headerbar">
        <h1 class="headerbar-title"><?php _trans('projects_form'); ?></h1>
        <?php $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div id="content">

        <?php $this->layout->load_view('layout/alerts'); ?>

        <div class="form-group">
            <label for="project_name"><?php _trans('project_name'); ?></label>
            <input type="text" name="project_name" id="project_name" class="form-control"
                   value="<?php echo $this->mdl_projects->form_value('project_name', true); ?>">
        </div>
        <div class="form-group">
            <label for="client_id"><?php _trans('client'); ?></label>
            <select name="client_id" id="client_id" class="form-control" autofocus="autofocus">
                  <?php
                    foreach ($clients as $client) {
                        echo "<option value=\"" . $client->client_id . "\" ";
                        echo ">" . htmlsc(format_client($client)) . "</option>";
                    }
                  ?>
            </select>
        </div>

    </div>

</form>
