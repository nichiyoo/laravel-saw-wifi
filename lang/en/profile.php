<?php

return [
    'show' => [
        'title' => 'Profile',
        'description' => "Account's profile information and email address.",
        'card_title' => 'Profile Information',
        'name' => 'Name',
        'role' => 'Role',
        'email' => 'Email',
        'created_at' => 'Created At',
        'updated_at' => 'Updated At',
        'edit' => 'Edit Profile',
    ],

    'edit' => [
        'title' => 'Profile',
        'description' => 'Update your account\'s profile information and email address.',
        'profile' => [
            'title' => 'Profile Information',
            'name' => 'Name',
            'email' => 'Email',
            'save' => 'Save',
        ],
        'password' => [
            'title' => 'Update Password',
            'current' => 'Current Password',
            'new' => 'New Password',
            'confirm' => 'Confirm Password',
            'update' => 'Update',
        ],
        'delete' => [
            'title' => 'Delete Account',
            'description' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.',
            'button' => 'Delete Account',
            'modal_title' => 'Are you sure you want to delete your account?',
            'modal_description' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.',
            'modal_password' => 'Password',
            'cancel' => 'Cancel',
            'confirm' => 'Delete Account',
        ],
    ],
];
