 <?php echo 'if you want to serve PHP code in XHTML or XML documents,
                use these tags'; ?>

2.  <script language="php">
        echo 'some editors (like FrontPage) don\'t
              like processing instructions within these tags';
    </script>

3.  <? echo 'this code is within short tags'; ?>
    Code within these tags <?= 'some text' ?> is a shortcut for this code <? echo 'some text' ?>

4.  <% echo 'You may optionally use ASP-style tags'; %>
    Code within these tags <%= $variable; %> is a shortcut for this code <% echo $variable; %>