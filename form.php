<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Задание №6</title>
    <style>
        .error {
		    border:2px solid red;
	    }
        .error1 {
            border:2px solid red;
            font-size:14pt;
            padding: 2px;
            margin: 0px auto;
            margin-bottom:2px;
            width: 420px;
            text-align:center;
        }
    </style>
</head>

<div class="modal" data-modal="1">
    <?php
    if (!empty($messages)) {
        print('<div id="messages">');
        foreach ($messages as $message) {
            print($message);
        }
        print('</div>');
    }
    ?>
    <body>
    <button onclick="document.location='login.php'">Авторизация</button><br/>
    <button onclick="document.location='admin.php'">Админ</button>
    </body>
    <form action="index.php" id="my-formcarry" accept-charset="UTF-8" class="main" method="POST">
        <label>Имя:<br/>
            <input style="margin-bottom : 1em" id="formname" type="text" name="fio" <?php if 
            ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>"> 
        </label><br/>
        <label>Email:<br/>
            <input style="margin-bottom : 1em; margin-top : 1em" id="formmail" type="email" name="email" 
            <?php if ($errors['email']) {print 'class="error"';} ?> 
            value="<?php print $values['email']; ?>">
        <label/><br/>
		<label>Год рождения:<br>
            <select name="birthyear" <?php if ($errors['year']) {print 'class="error"';} ?>
            value="<?php print $values['year_value']; ?>"><?php for ($i = 1950; $i < 2005; $i++) { ?>
            <option value="<?php print($i); ?>"><?php print($i); ?></option><?php } ?></select>
        </label><br/>
        <br>
        Выберите пол:<br/>
        <label>
            <input <?php if($values['sex_value']=="man")
            {print 'checked';}?> type="radio"
            name="radio2" value="man"/>Мужской
        </label>
        <label>
            <input <?php if($values['sex_value']=="woman")
            {print 'checked';}?> type="radio"
            name="radio2" value="woman"/>Женский
        </label><br/>
        <div <?php if($errors['limb'])?>>
            <br>Сколько у вас конечностей :<br/>
			<label>
                <input<?php if($values['limb_value']=="1"){print 'checked';}?>
                type="radio"name="radio1" value="1"/>1
            </label>
			<label>
                <input<?php if($values['limb_value']=="2"){print 'checked';}?>
                type="radio"name="radio1" value="2"/>2
            </label>
            <label>
                <input<?php if($values['limb_value']=="3"){print 'checked';}?>
                type="radio"name="radio1" value="3"/>3
            </label>
            <label>
                <input<?php if($values['limb_value']=="3"){print 'checked';}?>
                type="radio"name="radio1" value="4"/>4
            </label>
            <br>
        </div>
        <label>Ваши сверхспособности:<br/> 
                <select id="sp" name="superpower[]" multiple="multiple">
                    <option <?php if($values['abil_value']=="1"){print 'selected';}?> 
                    value="fly">Полет</option>
                    <option <?php if($values['abil_value']=="1"){print 'selected';}?> 
                    value="immortality" >Бессмертие</option>
                    <option <?php if($values['abil_value']=="1"){print 'selected';}?> 
                    value="telepathy">Чтение мыслей</option>
                    <option <?php if($values['abil_value']=="1"){print 'selected';}?> 
                    value="telekinesis">Телекинез</option>
                    <option <?php if($values['abil_value']=="1"){print 'selected';}?> 
                    value="teleportation">Телепортация</option>
                </select>
        </label><br/>
        <label <?php if ($errors['bio']) {print 'class="error-bio"';} ?>>
            Биография: <br/>
            <textarea id="biog" name="textarea1">
            <?php print $values['bio_value'];?></textarea>
        </label><br/>
        <label><input type="checkbox"
            name="checkbox" required />
            С правилами ознакомлен</label><br />
        <input type="submit" style="margin-bottom : -1em" id="formsend" 
        class="buttonform" value="Отправить">
    </form>
</div>
