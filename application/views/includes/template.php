<?php $this->load->view('includes/header'); ?>

<?php $this->load->view($content_page, $user); ?>

<?php $this->load->view('includes/sidebar', $user); ?>

<?php $this->load->view('includes/footer', $verse); ?>