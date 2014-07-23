<?php if (!defined('IN_PHPBB')) exit; ?><div class="post <?php if ($this->_rootref['S_PRIVMSGS']) {  ?>pm<?php } else { ?>bg2<?php } ?>" id="preview">
<?php if ($this->_rootref['S_HAS_POLL_OPTIONS']) {  ?>

	<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_START'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_START'] : ''; ?>

	<div class="content">
		<h2><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>: <?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?></h2>
		<p class="author"><?php if ($this->_rootref['L_POLL_LENGTH']) {  echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); ?><br /><?php } echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); ?></p>

		<fieldset class="polls">
		<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>

			<dl>
				<dt><label for="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></label></dt>
				<dd style="width: auto;"><?php if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?><input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } else { ?><input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } ?></dd>
			</dl>
		<?php }} ?>

		</fieldset>
	</div>

	<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_BLOCK_END'])) ? $this->_tpldata['DEFINE']['.']['CA_BLOCK_END'] : ''; ?>

</div>

<div class="post <?php if ($this->_rootref['S_PRIVMSGS']) {  ?> pm<?php } else { ?> bg2<?php } ?>">
<?php } ?>


<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_POST_START'])) ? $this->_tpldata['DEFINE']['.']['CA_POST_START'] : ''; ?>

    <?php echo (isset($this->_tpldata['DEFINE']['.']['CA_POST_PROFILE_EMPTY'])) ? $this->_tpldata['DEFINE']['.']['CA_POST_PROFILE_EMPTY'] : ''; ?>

        
    <?php echo (isset($this->_tpldata['DEFINE']['.']['CA_POST_TEXT_START'])) ? $this->_tpldata['DEFINE']['.']['CA_POST_TEXT_START'] : ''; ?>

	<div class="postbody">
		<h3><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>: <?php echo (isset($this->_rootref['PREVIEW_SUBJECT'])) ? $this->_rootref['PREVIEW_SUBJECT'] : ''; ?></h3>
		
		<div class="content"><?php echo (isset($this->_rootref['PREVIEW_MESSAGE'])) ? $this->_rootref['PREVIEW_MESSAGE'] : ''; ?></div>
		
		<?php if (sizeof($this->_tpldata['attachment'])) {  ?>

		<div class="ca-bbcode"><div class="ca-bbcode2 ca-attachment">
		<dl class="attachbox">
			<dt><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></dt>
			<?php $_attachment_count = (isset($this->_tpldata['attachment'])) ? sizeof($this->_tpldata['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$this->_tpldata['attachment'][$_attachment_i]; ?>

			<dd><?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></dd>
			<?php }} ?>

		</dl>
		</div></div>
		<?php } if ($this->_rootref['PREVIEW_SIGNATURE']) {  ?><div class="signature"><?php echo (isset($this->_rootref['PREVIEW_SIGNATURE'])) ? $this->_rootref['PREVIEW_SIGNATURE'] : ''; ?></div><?php } ?>

	</div>
    <?php echo (isset($this->_tpldata['DEFINE']['.']['CA_POST_TEXT_END'])) ? $this->_tpldata['DEFINE']['.']['CA_POST_TEXT_END'] : ''; ?>

<?php echo (isset($this->_tpldata['DEFINE']['.']['CA_POST_END'])) ? $this->_tpldata['DEFINE']['.']['CA_POST_END'] : ''; ?>

</div>

<hr />