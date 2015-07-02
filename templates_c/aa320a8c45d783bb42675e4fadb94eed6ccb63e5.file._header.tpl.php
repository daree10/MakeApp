<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 13:29:40
         compiled from "predlosci\_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306895575a07e7734b7-50186423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa320a8c45d783bb42675e4fadb94eed6ccb63e5' => 
    array (
      0 => 'predlosci\\_header.tpl',
      1 => 1434885981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306895575a07e7734b7-50186423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575a07e7c16c1_48835366',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575a07e7c16c1_48835366')) {function content_5575a07e7c16c1_48835366($_smarty_tpl) {?><!DOCTYPE html>
<html lang="hr">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
                <h1>Barbie.NET</h1> 
                <?php if ($_smarty_tpl->tpl_vars['title']->value=="Početna") {?>
                <p>Dobrodošli, <?php echo $_SESSION['ime'];?>
 <?php echo $_SESSION['prezime'];?>
</p>
                <?php }?>
            </div>

        </div><?php }} ?>
