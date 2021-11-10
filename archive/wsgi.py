from myapp import app
if __name__ == "__main__":
    app.run()

# (to run)gunicorn -w 4 -b 127.0.0.1:4000 wsgi:app