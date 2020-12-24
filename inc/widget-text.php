<?php

class davy_Widget_Text extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'davy_widget_text', 
            'test-widget',
            [
                'name' => 'test-widget',
                'description' => 'test-desc',
            ]
        );
    }

    public function form( $instance) {
?>
<p>     
        <label for="<?php get_field_id('id-text') ?>">
            input text
        </label>
        <input
            id="<?php echo $this->get_field_id('id-text') ?>" 
            type="text"
            name="<?php echo $this->get_field_name('text') ?>"
            value="<?php echo $instance['text'];  ?>"
        >
</p>
<?php 
    }

    public function widget( $args, $instance )  {

    }

    public function update( $new_instance, $old_instance ) {

    }


}