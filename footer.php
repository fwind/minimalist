<div data-role="footer" >



<p>版权所有 &copy; 2009 - 2013 fwind
       Powered By : <a target="_blank" href="http://wordpress.org/" title="WordPress主页" rel="external nofollow">WordPress</a> <strong>Code is fwind</strong>
</p>


</div><!-------------- /footer -------->
<script>
$(".widget ul").replaceWith('<ol data-role="listview" >' + $(".widget ul").html() + '</ol>')
</script><!-------------- 给widget添加class，让jqm初始化。
由于jqm的执行流程原因，需要在每次jqm执行前就加上class，才会被执行jqm的样式，jqm的事件函数还不好使用，暂时放这里 -------->

<?php wp_footer();//??? ?>
</div><!---------- /page ---------->

</body>
</html>