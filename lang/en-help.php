<?php if(!defined('PLX_ROOT')) exit; ?>
<!-- 07/04/2013 -->
<h2>Help</h2>
<p>
Edit pluxml/core/admin/medias.php and modify line 232 :
<br />
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
			&lt;/p&gt;</pre>
in :
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
# Hook plxQuickSearch Plugin
&lt;?php eval($plxAdmin->plxPlugins->callHook('AdminMediasQuickSearch')); ?&gt;
#/Hook plxQuickSearch Plugin
			&lt;/p&gt;</pre>
</p>

<p>
Edit pluxml/core/admin/index.php and modify line 144 :
<br />
<pre>	echo '&lt;input class="button submit" type="submit" name="submit" value="'.L_OK.'" /&gt;';
	echo '&lt;/p&gt;';</pre>
in :
<pre>	echo '&lt;input class="button submit" type="submit" name="submit" value="'.L_OK.'" /&gt;';
# Hook plxQuickSearch Plugin
eval($plxAdmin->plxPlugins->callHook('AdminMediasQuickSearch'));
#/Hook plxQuickSearch Plugin
	echo '&lt;/p&gt;';</pre>
</p>

<p>
Edit pluxml/plugins/plxeditor/medias.php  and modify line 279 :
<br />
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
			&lt;/p&gt;</pre>
in :
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
# Hook plxQuickSearch Plugin
&lt;?php eval($plxAdmin->plxPlugins->callHook('AdminMediasQuickSearch')); ?&gt;
#/Hook plxQuickSearch Plugin
			&lt;/p&gt;</pre>
</p>

<p>
Edit pluxml/plugins/plxtoolbar/medias.php  and modify line 278 :
<br />
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
			&lt;/p&gt;</pre>
in :
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
# Hook plxQuickSearch Plugin
&lt;?php eval($plxAdmin->plxPlugins->callHook('AdminMediasQuickSearch')); ?&gt;
#/Hook plxQuickSearch Plugin
			&lt;/p&gt;</pre>
</p>
