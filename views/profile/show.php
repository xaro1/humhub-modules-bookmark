<?php
use humhub\modules\bookmark\widgets\ProfileBookmarkStreamViewer;


echo ProfileBookmarkStreamViewer::widget([
    'contentContainer' => $contentContainer,
    'filters' => [
        'filter_entry_files' => Yii::t('ContentModule.widgets_views_stream', 'Content with attached files'),
        'filter_entry_mine' => Yii::t('ContentModule.widgets_views_stream', 'Created by me'),
        'filter_entry_archived' => Yii::t('ContentModule.widgets_views_stream', 'Include archived posts'),
        'filter_visibility_public' => Yii::t('ContentModule.widgets_views_stream', 'Only public posts'),
        'filter_visibility_private' => Yii::t('ContentModule.widgets_views_stream', 'Only private posts')
    ]
]);
?>
