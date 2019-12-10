
const path = require('path');
const webpack = require('webpack');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');

module.exports = (env, argv) => {
    let devmode;
    let isDevelopment = argv.mode === 'development';
    if(isDevelopment === true){
        devmode = 'inline-source-map';
        console.log('[OK] development build');
    }else{
        devmode = 'none';
        console.log('[OK] production build');
    }
    return {
        context: path.resolve(__dirname, 'src'),
        entry: {
            'js/main': './main.js',
            'js/script': './script.js',
        },
        output: {
            path: path.resolve(__dirname, 'public'),
            publicPath: './',
            filename: '[name]-[hash].js'
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    include: path.resolve(__dirname, 'src'),
                    exclude: /node_modules/,
                    use: [{
                        loader: 'babel-loader',
                        options: {
                            presets: [
                                ['@babel/env']
                            ]
                        }
                    }]
                }, {
                    test: /\.(vert|frag)$/,
                    use: 'raw-loader',
                }, {
                    test: /\.scss/,
                    use: [
                        "style-loader",
                        {
                            loader: "css-loader",
                            options: {
                                url: false,
                                sourceMap: isDevelopment,
                                importLoaders: 2
                            }
                        }, {
                            loader: "postcss-loader",
                            options: {
                                sourceMap: isDevelopment,
                                plugins: [
                                    require("autoprefixer")({
                                        grid: true
                                    })
                                ]
                            }
                        },
                        {
                            loader: "sass-loader",
                            options: {
                                sourceMap: isDevelopment,
                            }
                        }
                    ]
                }
            ]
        },
        cache: true,
        devtool: devmode,
        plugins: [
            new CleanWebpackPlugin({
                cleanOnceBeforeBuildPatterns: [
                    'js',
                    '!css',
                    '!resource',
                ],
            }),
            new HtmlWebpackPlugin({
                filename: 'index.php',
                template: './index.php',
            }),
        ],
    };
};

