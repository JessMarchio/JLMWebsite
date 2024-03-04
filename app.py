from flask import Flask, render_template

app = Flask(__name__)

# Define routes
@app.route('/')
def index():
    return render_template('index.html')

@app.route('/about')
def about():
    return render_template('about.html')

@app.route('/contact')
def contact():
    return render_template('contact.html')

@app.route('/articles')
def contact():
    return render_template('articles.html')

@app.route('/portfolio')
def contact():
    return render_template('portfolio.html')

if __name__ == '__main__':
    app.run(debug=True)
