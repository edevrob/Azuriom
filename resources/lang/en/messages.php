<?php

return [

    'lang' => 'English',

    'copyright' => 'Powered by <a href="https://azuriom.com" target="_blank" rel="noreferrer">Azuriom</a>.',

    'date' => 'F j, Y',
    'date-full' => 'F j, Y \a\t g:i A',
    'date-compact' => 'm/d/Y \a\t g:i A',

    'nav' => [
        'profile' => 'Profile',
        'admin' => 'Admin dashboard',
    ],

    'actions' => [
        'add' => 'Add',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'delete' => 'Delete',
        'save' => 'Save',
        'browse' => 'Browse',
        'choose-file' => 'Choose file',
        'upload' => 'Upload',
        'cancel' => 'Cancel',
        'enable' => 'Enable',
        'disable' => 'Disable',
    ],

    'fields' => [
        'name' => 'Name',
        'title' => 'Title',
        'action' => 'Action',
        'date' => 'Date',
        'slug' => 'Slug',
        'link' => 'Link',
        'enabled' => 'Enabled',
        'author' => 'Author',
        'user' => 'User',
        'image' => 'Image',
        'type' => 'Type',
        'file' => 'File',
        'description' => 'Description',
        'content' => 'Content',
        'color' => 'Color',
        'version' => 'Version',
    ],

    'yes' => 'Yes',
    'no' => 'No',
    'unknown' => 'Unknown',
    'none' => 'None',

    'home' => 'Home',

    'maintenance' => 'Maintenance',

    'profile' => [
        'title' => 'My Profile',
        'change-email' => 'Change E-Mail Address',
        'change-password' => 'Change Password',

        'not-verified' => 'Your email is not verified, please check your email for a verification link.',

        'updated' => 'Profile updated',

        'info' => [
            'role' => 'Role: :role',
            'register' => 'Register: :date',
            '2fa' => 'Two-Factor Authentication (2FA): :2fa'
        ],

        '2fa' => [
            'enable' => 'Enable 2FA',
            'disable' => 'Disable 2FA',
            'info' => 'Scan the QR code above with an two-factor authentication app on your phone like Google Authenticator.',
            'secret' => 'Secret key: :secret',
            'title' => 'Enable Two Factor Authentication',
            'code' => 'Code',
            'enabled' => 'Two Factor Authentication enabled',
            'disabled' => 'Two Factor Authentication disabled',
        ],

        'email-not-verified' => 'Your email is not verified, please check your email for a verification link. If you did not receive the email you can resend it',

    ],

    'posts' => [
        'posts' => 'Posts',
        'posted' => 'Posted on :date by :user',
        'not-published' => 'This post is not published yet',
        'read' => 'Read more',
    ],

    'comments' => [
        'create' => 'Leave a comment',
        'guest' => 'You must be logged in to leave a comment.',
        'author' => ':user on :date',
        'your-comment' => 'Your comment',
        'delete-title' => 'Delete ?',
        'delete-description' => 'Are you sure you want to delete this comment ?',
    ],

    'likes' => 'J\'aimes: :likes',
];