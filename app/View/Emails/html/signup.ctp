<p>
    <strong>Bonjour <?php echo $username; ?></strong>
</p>

<p>Pour activer votre compte suivez le lien: </p>
<p><?php echo $this->Html->link('Activer mon compte', $this->Html->url($link, true)); ?></p>