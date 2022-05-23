<?php
class Portfolio_Header_Widgets extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'hello_world_widget_1';
    }

    public function get_title()
    {
        return esc_html__('Portfolio Header', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['portfolio', 'header'];
    }

    protected function render()
    {
?>

        <p> First Elementor Addons Widget </p>

<?php
    }
}
