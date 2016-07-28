<?php

function ssom_add_custom_metabox() {
  add_meta_box(
    'ssom_meta',
    'Football Clubs',
    'ssom_meta_callback'
  );
}
add_action( 'add_meta_boxes', 'ssom_add_custom_metabox');

function ssom_meta_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'ssom_clubs_nonce' );
  $ssom_stored_meta = get_post_meta( $post->ID )
    ?>

    <div>
      <div class="meta-row">
        <div class="meta-th">
          <label for="club-id" class="ssom-row-title">Club ID</label>
        </div>
        <div class="meta-td">
          <input type="text" name="club-id" id="club-id" value="<?php if ( ! empty ( $ssom_stored_meta['club_id'] ) ) echo esc_attr( $ssom_stored_meta['club_id'][0] ); ?>"/>
        </div>
      </div>
      
    </div>
    <div class="meta">
      <div class="meta-th">
        <span>Bio</span>
      </div>
    </div>
    <div class="meta-editor"></div>

    <?php

    $content = get_post_meta( $post->ID, 'bio', true );
    $editor = 'bio';
    $settings = array(
      'textarea_rows' => 8,
      'media_buttons' => false,
      'tinymce'       => false
    );

    wp_editor( $content, $editor, $settings );

    ?>

    <div class="meta-row">
      <div class="meta-th">
        <label for="most-valuable-player" class="wpdt-row-title"><?php _e( 'Most valuable player', 'hrm-textdomain' )?></label>
      </div>
      <div class="meta-td">
        <textarea name="most-valuable-player" class ="hrm-textarea" id="most-valuable-player"><?php if ( isset ( $hrm_stored_meta['most-valuable-player'] ) ) echo esc_attr( $hrm_stored_meta['most-valuable-player'][0] ); ?></textarea>
      </div>
    </div>
    <div class="meta-row">
      <div class="meta-th">
        <label for="professional-football-organization" class="prfx-row-title"><?php _e( 'Professional football organization', 'hrm-textdomain' )?></label>
      </div>
      <div class="meta-td">
        <select name="professional-football-organization" id="professional-football-organization">
          <option value="select-yes">Yes</option>';
          <option value="select-no">No</option>';
        </select>
      </div> 
    </div> 

    <?php
};

function ssom_meta_save( $post_id ) {
  // Checks save status
  $is_autosave = wp_is_post_autosave( $post_id );
  $is_revission = wp_is_post_revision( $post_id );
  $is_valid_nonce = ( isset( $_POST[ 'ssom_clubs_nonce' ] ) && wp_verify_nonce( $_POST[ 'ssom_clubs_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

  // Exits script depending on save status
  if ( $is_autosave || $is_revission || !$is_valid_nonce ) {
    return;
  }

  if ( isset( $_POST['club_id'] ) ) {
    update_post_meta( $post_id, 'club_id', sanitize_text_field( $_POST[ 'club_id' ] ) );
  }
}
add_action( 'save_post', 'ssom_meta_save' );