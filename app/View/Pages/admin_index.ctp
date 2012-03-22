<h1>Efetue login</h1>
<?php
echo $this->Form->create( 'User', array( 'action' => 'login', 'class' => 'well' ) ) . "\r\n" .
     $this->Form->input( 'username', 
                   array( 'label' => 'Nome de Usuário' ) ) . "\r\n" .
     $this->Form->input( 'password',
                   array( 'label' => 'Senha' ) ) . "\r\n" .
     $this->Form->end( array( 'label' => 'Entrar', 'class' => 'btn-primary' ) ) . "\r\n";
?>