<?php
    function ConnectionToggle($isConnection) {
        printf('<div class="toggle">
                    <button class="left %s" onclick="window.location.href=\'connection.php\'">Connection</button>
                    <button class="right %s" onclick="window.location.href=\'inscription.php\'">Inscription</button>
                </div>',
            $isConnection ? 'isSelect' : '',
            !$isConnection ? 'isSelect' : ''
        );
    }
?>