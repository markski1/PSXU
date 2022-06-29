# PSXU
PSXU is a single-file PHP script to upload files on your webserver through Sharex for quick sharing.

There are already a couple solutions like this, but they have a fair bit many more features than I'd like, and require some more setup.

PSXU was made with the following in mind:
- It receives a file through Sharex, and returns a URL to the file.
- If it fails, it clearly says why.
- It can be installed in under 5 minutes by anyone who can follow written instructions.

If this is all you seek and no more, PSXU might be what you seek.

## Instructions

### Part 1: Set up the script on your server.

1. Download psxu.php and config.php
2. Fill in the values in config.php, they all have helpful comments.
3. Optionally, rename psxu.php to something random to avoid people trying to poke at it.
4. Upload the file to your webserver. Keep in mind files will be uploaded to the same directory as the file is.

### Part 2: Set up Sharex

Open Sharex, head to "destinations" and then Custom Uploader Settings.

Create a new uploader, and fill in the blanks:
- Name: A name for the uploader. Can be anything.
- Request URL: The path to psxu.php (or whatever you might've called it) in your webserver.
- Method: POST
- File form name: fileupload
- Finally, add a field named "key", where the value is your $secret_key, without the quotes.

You should end up with something like this:

![imagen](https://user-images.githubusercontent.com/22557859/169721742-16555f46-8a30-4803-91ab-07b107b30e71.png)

Use the test buttons on the bottom left to ensure upload functions work. If they do, simply close the window.

Finally, set your default upload settings to it in the Destinations menu.

![imagen](https://user-images.githubusercontent.com/22557859/169721793-d6116565-e8f5-47c1-b1b5-e66854be385c.png)


#### That's it.

If you have issues or sugggestions, open an Issue or PR as you see fit.
