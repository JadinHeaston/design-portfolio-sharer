<?php

/**
 * Custom Auth function that should return whether the user is authorized or not.
 * A failed auth results in reauth() being called.
 *
 * @return boolean
 */
function auth(): bool
{
	return true;
}

/**
 * Custom function that is triggered upon a failed auth().
 *
 * @return boolean
 */
function reauth(): void
{
	exit(1);
}

function checkForFolder(string $folderPath): bool
{
	if (is_dir($folderPath) === false)
	{
		if (mkdir($folderPath, 0775, true) === false)
		{
			echo 'FAILURE: Directory exists as a file. Failed to create directory. Please delete the file and try again. Path: ' . $folderPath;
			return false;
		}
	}

	if (is_writable($folderPath) === false)
	{
		if (chmod($folderPath, 0775) === false)
		{
			echo 'FAILURE: Directory not writeable. Failed to update permissions. Please allow PHP to write to this directory. Path: ' . $folderPath;
			return false;
		}
	}
	return true;
}