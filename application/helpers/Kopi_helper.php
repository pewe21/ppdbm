<?php
function views($content, $params)
{
    $kops = &get_instance();
    $kops->load->view("layout/header", ["title" => $params]);
    $kops->load->view($content);
    $kops->load->view("layout/footer");
}
